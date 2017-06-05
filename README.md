# Install Docker Toolbox
- Download  and install [Docker Toolbox](https://www.docker.com/products/docker-toolbox)
- Add `C:\Program Files\Docker Toolbox` to system PATH

# Create machine
```
$ docker-machine create default
$ docker-machine env default
```

# Start containers  
```
$ git clone git@github.com:gomezdanielg/docker-lamp-dev-env.git
$ docker-compose up -d
$ docker-machine ip default
```
