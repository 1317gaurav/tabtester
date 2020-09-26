
To see the container id
docker ps -a
To see the image id
docker image ls
stop running container 
docker stop <containerid>
remove container 
docker rm <contained>
Remove image
docker rmi <imageid>



cd tab
docker build -t tab .
docker run -d -p 8999:80 tab .
