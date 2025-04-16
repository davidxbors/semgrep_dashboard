# Semgrep Dashboard

This project uses [xsafetech/semgrep-report](https://github.com/xsafetech/semgrep-report) as a starting point.
However, I made some modifications to make my life easier:

* it automatically loads the result files from a given directory, mounted when creating the container
* it runs using docker for easy deployment

## Running

```console
docker compose up --build -d
```

It automatically loads all the `.json` files from the `results/` directory.
If new results are added, simply refresh the page and the findings will appear on the dashboard.
If one wants to mount a different directory, simply change the `docker-compose.yml` file.
