sudo docker stop tabtester
sudo docker container prune -f
# docker rmi tsocial
# docker image prune -a -f
# docker build .  -t tab
sudo docker build .  -t tabtester --network host
sudo docker-compose up -d 
# docker run  -p 80:443 -d --name tab  tab:latest
