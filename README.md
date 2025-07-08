# AddOn-Template-SuiteCRM

This is a **SuiteCRM add-on template** to create any **Add-on** that adds more custom features to your system. It's designed to be installed via **Module Loader** and extended later with your own logic.

--

## 📁 Folder Structure
AddOn-Template-SuiteCRM/
├── manifest.php
├── install.php
├── post_install.php
├── custom/
│ └── Extension/
│   ├── add_on.php
│   └── application/
│       └── Ext/
│           └── EntryPointRegistry/
│               └── add_on.php

---

## 🔧 Installation

1. Zip the contents of `AddOn-Template-SuiteCRM/` folder.
2. Go to SuiteCRM → Admin → Module Loader.
3. Upload and install the zip file.
4. Run **Quick Repair & Rebuild**.

---

## 🛡️ License

MIT License — free to use, modify, and distribute.

---

## 👩‍💻 Author

Created by [Sara Medhat] — feel free to fork and build on top of this.
Feel free to contact me anytime at sarahmdht@gmail.com .
