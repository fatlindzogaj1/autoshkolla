# Autoshkolla

Live project: `https://autoshkolla.zogaj.me`

## Local setup

### 1) Clone and enter the project

```bash
git clone <repo-url> (copy from GitHub above, depending on whether you want to use SSH, HTTPS, or the GitHub CLI)
cd autoshkolla
```

### 2) Install dependencies

```bash
composer install
npm install
```

### 3) Create your environment file

```bash
cp .env.example .env
```

### 4) Generate app key

```bash
php artisan key:generate
```

### 5) Run migrations and seeders

```bash
php artisan migrate --seed
```

If image seeders fail (external API can sometimes block requests), run:

```bash
php artisan migrate:fresh --seed
```

### 6) Start the local development environment

```bash
composer dev
```

`composer dev` runs Laravel server, queue listener, logs, and Vite in parallel.

## Notes

- Default DB in `.env.example` is SQLite (`DB_CONNECTION=sqlite`).
- If needed, make sure `database/database.sqlite` exists and is writable.
- Image download commands used by seeders are:
  - `php artisan questions:download-images`
  - `php artisan answers:download-images`
