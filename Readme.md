# 🦜Simple Bot Google DialogFlow and APIGratis
_This is a small demonstration of how to create a bot with DialogFlow using APIGratis or MyZap Free or Premium_

### Start new session WhatsApp
https://homologacao.wppserver.com/start

### Get token for API WhatsApp
https://apigratis.com.br

### Install the application

```bash
cp .env.example .env
```

```bash
composer install
```

### Using ngrok for windows (optional)

```bash
.\ngrok.exe http 80
```

### Run webhook
```bash
php -S localhost:80 .\WebHook.php
```

### Default address webhook
```bash
http://localhost:80:/webhook
```

### Download json_credentials.json
https://console.cloud.google.com/projectselector2/iam-admin/serviceaccounts?supportedpurview=project

### DialogFlow 
https://dialogflow.cloud.google.com/


