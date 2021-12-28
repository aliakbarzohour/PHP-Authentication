FROM mysql:latest
RUN sudo docker run -e 'ACCEPT_EULA=Y' -e 'SA_PASSWORD=<YourStrong!Passw0rd>' \
-p 5000:5000 --name sql1 \
-d mcr.microsoft.com/mssql/server:latest

RUN CREATE DATABASE authentication
RUN CREATE TABLE Inventory (id INT, name NVARCHAR(50), quantity INT)