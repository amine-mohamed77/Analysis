# 🔎 Analysis  
# ⚙️ my-converter  

A **small CLI tool** to convert numbers between **decimal ↔ binary ↔ hexadecimal** and to apply **bitwise operations**.

🧮 CLI Calculator
Mini calculatrice en PHP (CLI) pour convertir des entiers en binaire/hex et appliquer les opérateurs logiques.

🚀 Installation
git clone <repo>
cd my-cli-calc
composer install
---

## 🚀 Features  
- Convert numbers between:
  - Decimal ➝ Binary  
  - Decimal ➝ Hexadecimal  
- Perform bitwise operations:
  - `AND`, `OR`, `XOR`, `NOT`  
- Work with **flags/masks**.

---

## 📦 Usage  

```bash
# Convert a number (decimal -> binary/hex)
php bin/convert.php -n 23 --op convert

# Bitwise AND with a mask
php bin/convert.php -n 23 --op and --mask 5

# Work with flags
php bin/convert.php -n 6 --op flags --flags '{"read":4,"write":2,"exec":1}'
