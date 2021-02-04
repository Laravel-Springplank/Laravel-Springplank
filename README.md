<h1>Laravel SpringPlank</h1>
<hr>
<p>Commands:</p>
<ul>
  <li>npm install</li>
  <li>npm run dev</li>
  <li>php artisan serve</li>
  <li>composer require laravel/fortify</li>
</ul>

## Permissions
To create roles use the following commands:
- **php artisan permission:create-role Administrator**
- **php artisan permission:create-role Moderator**
- **php artisan permission:create-role Gebruiker**

- **composer require spatie/laravel-permission**
- **php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"**
- **php artisan migrate**
