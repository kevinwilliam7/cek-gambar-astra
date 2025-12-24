import torch
from torchvision import models

# Load model
model = models.resnet18()
model.fc = torch.nn.Linear(model.fc.in_features, 4)  # sesuai jumlah kelas label
model.load_state_dict(torch.load("motor_model.pth", map_location="cpu"))
model.eval()

# Dummy input
dummy_input = torch.randn(1,3,224,224)

# Export ke ONNX versi 18
torch.onnx.export(
    model,
    dummy_input,
    "motor_model.onnx",
    opset_version=18,
    input_names=["input"],
    output_names=["output"],
    dynamic_axes={"input": {0: "batch_size"}, "output": {0: "batch_size"}},
    verbose=True
)

print("Berhasil convert ke motor_model.onnx")
