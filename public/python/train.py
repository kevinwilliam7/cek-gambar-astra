from torchvision import datasets, transforms, models
from torch.utils.data import DataLoader
import torch.nn as nn
import torch.optim as optim

# transformasi gambar
transform = transforms.Compose([
    transforms.Resize((224,224)),
    transforms.ToTensor()
])

# load dataset
train_data = datasets.ImageFolder('train_datasets', transform=transform)
train_loader = DataLoader(train_data, batch_size=32, shuffle=True)

# model pretrained
model = models.resnet18(pretrained=True)
model.fc = nn.Linear(model.fc.in_features, len(train_data.classes))

# loss & optimizer
criterion = nn.CrossEntropyLoss()
optimizer = optim.Adam(model.parameters(), lr=0.001)

# training loop sederhana
for epoch in range(5):
    for images, labels in train_loader:
        optimizer.zero_grad()
        outputs = model(images)
        loss = criterion(outputs, labels)
        loss.backward()
        optimizer.step()
    print(f"Epoch {epoch+1}, Loss: {loss.item()}")
