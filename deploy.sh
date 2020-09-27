docker stop tab
docker container prune -f
# docker rmi tsocial
# docker image prune -a -f
# docker build .  -t tab
docker build .  -t tab --network host
docker-compose up -d 
# docker run  -p 80:555 -d --name tab  tab:latest
