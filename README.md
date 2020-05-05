# Simple Website Project PHP

## Use this website project base

### Creating a model
An example template is already integrated but here are some explanations ...
The 'template' folder must be placed here `/Web/` and must contain the `backend` and `frontend` folders.

#### The minimum tree of the template must be
* `/template/` : Root template.
* `/template/backend/` : Template used for the backend.
* `/template/frontend/` : Template used for frontend.

#### Template files

Each template (backend and frontend) must contain at least two files:
* `online.php` : Used when the site is online.
* `offline.php` : Used when the site is offline.

To show views (placed in the `/Views/Backend/` folder and `/Views/Frontend/`), you must use the code `<?=ShowView()?>`, in the HTML of the online.php file.

### Creating a page/view

#### Views should be inserted into the folder
* `/Views/Backend/` for backend-related views.
* `/Views/Frontend/`for frontend-related views.

All you have to do is create an `exemple.php` php file at the right location, then insert the desired HTML/PHP code and it will be automatically embedded in the 'online.php' file via the `<?=ShowView()?>` code line.



