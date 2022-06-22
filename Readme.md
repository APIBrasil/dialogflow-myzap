# 🦜Simple Bot Google DialogFlow and APIGratis
_This is a small demonstration of how to create a bot with DialogFlow using APIGratis or MyZap Free or Premium_

<hr />

### 💸 Get token for API WhatsApp
https://apigratis.com.br

### 💉 Install dependencies

```bash
cp .env.example .env
```

```bash
composer install
```

### 🔌Using ngrok for windows (optional) 

```bash
.\ngrok.exe http 80
```

### 🔌 Run webhook
```bash
php -S localhost:80 .\WebHook.php
```

### 💻 Start new session WhatsApp
https://homologacao.wppserver.com/start

### 📌 Create new session infos
Session Name = ```session_demo```<br/>
Session Key = ```session_demo```<br/>
API Token = ```Solicite ao APIGratis```

### 🎉 Default address webhook 
```bash
http://localhost:80/webhook
```

### Download json_credentials.json
https://console.cloud.google.com/projectselector2/iam-admin/serviceaccounts?supportedpurview=project

### DialogFlow 
https://dialogflow.cloud.google.com/


### Contribuidores: ✨

Obrigado a essas pessoas maravilhosas
<table>
  <tr>
    <td align="center"><a href="https://github.com/jhowbhz"><img src="https://avatars.githubusercontent.com/u/31408451?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Jonathan Henrique</b></sub></a><br />
    </td>
    <td align="center"><a href="https://github.com/bruno-hashimoto"><img src="https://avatars.githubusercontent.com/u/15908424?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Bruno Hashimoto</b></sub></a><br />
    </td>
  </tr>
</table>
