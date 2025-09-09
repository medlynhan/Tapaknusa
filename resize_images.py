import os
from PIL import Image

# folder tempat gambar
folder = r"C:\xampp\htdocs\tapaknusa\Tapaknusa\public\asset"

# loop semua file gambar
for filename in os.listdir(folder):
    if filename.lower().endswith((".jpg", ".jpeg", ".png", ".webp")):
        img_path = os.path.join(folder, filename)
        img = Image.open(img_path).convert("RGB")  # biar aman juga untuk webp

        # resize misal jadi 50% dari ukuran asli
        img = img.resize((img.width // 2, img.height // 2))

        # overwrite file lama dengan hasil yang lebih kecil
        img.save(img_path, optimize=True, quality=85)

print("✅ Selesai! Semua gambar sudah diperkecil tanpa ubah nama file.")
