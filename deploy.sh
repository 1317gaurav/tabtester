docker stop tab
docker container prune -f
# docker rmi tsocial
# docker image prune -a -f
docker build .  -t tab
docker run  -p 555:555 -d --name tab  tab:latest
