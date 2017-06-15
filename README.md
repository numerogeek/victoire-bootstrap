Victoire Bootstrap
========

## Docker

* `make all` - Do configure, start and install
* `make configure` - Configure the project and build docker
* `make start` - Start the docker containers
* `make install` - Install the composer dependencies and migrate database

If the install crash, create the './data' directory on root of your project.
#### Note for Mac users:

The `make configure` command will crash because the `ip` command doesn't exist on OSX. To fix this you can edit manually the file `docker/settings/env_access`, like so:

```
WWW_DATA_UID=501
WWW_DATA_GUID=20
LOCAL_IP=192.168.99.100
```

If you have an issue with the UID, add a `docker-compose.override.yml` file with this content:

```
db:
    user: "501"
```

Cheat Sheet :
------

* Enter mysql : 
```docker-compose run --rm tools mysql```
* Enter bash container : 
```docker-compose run --rm tools bash```
