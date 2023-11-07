# Technical Test - Symfony repository
This is the first section of a technical test in 3 parts.
The aim of this section is to create an API endpoint via symfony that returns the same content as https://catfact.ninja/fact.

## Run the app
#### Setup
If you want to run it locally: download the project, and `composer install` at the root.
If you want to use docker, you can pull the image with `docker pull pamplemouss/symfonytest`
#### Run
`symfony serve -d` will open the serve on port `8000`.
#### Access
You can access the api endpoint there: `your.website/v1/api/test-content`

## Repository structure
The main files are:
- `FactAPIController.php` that sets the route and returns the API content
- `CatFactService.php` that fetches returns the catfact website json