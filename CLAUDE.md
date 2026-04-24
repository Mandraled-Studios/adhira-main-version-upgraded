# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

```bash
# Install dependencies
composer install
npm install

# Run development servers (run both in parallel)
php artisan serve
npm run dev

# Build frontend assets for production
npm run build

# Database
php artisan migrate
php artisan migrate:fresh --seed  # reset + seed

# Tests
php artisan test
php artisan test --filter=TestClassName  # single test class

# Clear caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## Architecture

**Adhira** is a Laravel 11 tax/compliance management portal with a public-facing front-end and a protected admin area.

### Application Domains

| Domain | Model | Controller | Notes |
|---|---|---|---|
| Tax due dates | `Duedate` | `DuedateController` | Soft-deleted; categories: `income-tax`, `gst`, `other` |
| News/updates | `News` | `NewsController` | Soft-deleted |
| Client enquiries | `Enquiry` | `EnquiryController` | Uses `archive` timestamp instead of soft delete |
| Admin users | `User` | (auth + `HomeController`) | Has `isActive` status field |

### Route Structure

- `GET /`, `/clients`, `/calculator` — public pages via `PagesController`
- `GET /home` — admin dashboard (auth required), filterable by `week`/`month`/`year`
- `PATCH /admin/{id}` — toggle admin active status
- Standard resource routes: `/due-dates`, `/whats-new`, `/enquiries`

### Frontend

Bootstrap 5 + Sass compiled via Vite. Blade templates live in `resources/views/` with `auth/` and `pages/` subdirectories sharing a common layout. Compiled assets are output to `public/build/`.

### Database

MySQL by default (database name: `adhira_main_version_upgraded`). Sessions, cache, and queues are all database-backed. Tests override these to use array drivers.

### Authentication

Uses `laravel/ui` (v4.5) — scaffolded auth controllers live in `app/Http/Controllers/Auth/`. There is no API authentication; the app is session-based only.
