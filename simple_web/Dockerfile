# Specifiy base image
FROM  node:alpine

WORKDIR /usr/apps

# Install some dependencies
COPY ./package.json ./
RUN npm install
COPY ./ ./

# Default command
CMD ["npm", "start"]
