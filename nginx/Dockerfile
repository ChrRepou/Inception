
FROM debian:bookworm

RUN DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y \
    nginx \
    openssl

# Create a self-signed certificate
RUN openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -days 365 -subj "/CN=localhost"

# Configure nginx
COPY nginx.conf /etc/nginx/nginx.conf

RUN nginx -t

# Change directory to nginx default
WORKDIR /var/www/html

# Expose the nginx port
EXPOSE 443

# Set nginx as the default command
CMD ["nginx", "-g", "daemon off;"]
