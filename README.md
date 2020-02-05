# urOnlineShop

## Installation process

In order to deploy and run this project, it is necessary to have a working Laravel environment (^6).
This project may be installed and deployed as follows:

- Clone the repository on a directory.
- Install all composer dependencies.
- Install all npm dependencies (frontend). For a dev environment, run "npm run dev".
- Set up the environment variables as needed (DB connection, URL, PlacetoPay Login and Transactional keys, etc.)
- Run the seeds for the Articles model ("php artisan db:seed")
- Start the server. (php artisan serve)

Finally, you will have your project up and running :)

## About the structure of the project

This project has two main entities: [Orders] and [Articles]. As such, all routing has been set up around these two entities, so feel free to check out the routes to understand how the app works.

At the time of writing, there are some features pending such as [Article] creation, update and delete. However, the entire required workflow is working. 

## Laravel Sponsors

In case of any doubts, don't hesitate to contact me.
