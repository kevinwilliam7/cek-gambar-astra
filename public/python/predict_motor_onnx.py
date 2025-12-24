import onnxruntime as ort
from PIL import Image
import torchvision.transforms as transforms
import numpy as np
import sys
import json
import os

# =========================
# 1. Load model ONNX
# =========================
# Path ONNX relatif terhadap file Python ini
onnx_model_path = os.path.join(os.path.dirname(__file__), "motor_model.onnx")

session = ort.InferenceSession(onnx_model_path)

# =========================
# 2. Label kelas (sesuaikan dengan training)
# =========================
labels = ["Revo_JBK1E", "Revo_JBK3E", "Vario125 JMC1E", "Vario125 JMD1E"]  # ubah sesuai kelas dataset kamu

# =========================
# 3. Transformasi gambar
# =========================
transform = transforms.Compose([
    transforms.Resize((224,224)),
    transforms.ToTensor(),
    transforms.Normalize([0.485,0.456,0.406],[0.229,0.224,0.225])
])

# =========================
# 4. Ambil path foto dari argumen
# =========================
if len(sys.argv) < 2:
    print(json.dumps({"error": "Path foto tidak diberikan"}))
    sys.exit(1)

image_path = sys.argv[1]

try:
    img = Image.open(image_path).convert("RGB")
except Exception as e:
    print(json.dumps({"error": f"Gagal buka gambar: {str(e)}"}))
    sys.exit(1)

# =========================
# 5. Preprocessing dan reshape untuk ONNX
# =========================
img_tensor = transform(img).unsqueeze(0).numpy()  # shape: 1x3x224x224

# =========================
# 6. Prediksi
# =========================
inputs = {session.get_inputs()[0].name: img_tensor}
outputs = session.run(None, inputs)
pred_class = int(np.argmax(outputs[0], axis=1)[0])
confidence = float(np.max(outputs[0]))

# =========================
# 7. Output JSON
# =========================
result = {
    "model": labels[pred_class],
    "confidence": confidence
}

print(json.dumps(result))
