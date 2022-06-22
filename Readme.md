# 🦜Simple Bot Google DialogFlow and APIGratis
_This is a small demonstration of how to create a bot with DialogFlow using APIGratis or MyZap Free or Premium_

<p align="left">
<a href="https://github.com/jhowbhz/followers"><img title="Seguidores" src="https://img.shields.io/github/followers/jhowbhz?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/stargazers/"><img title="Estrelas" src="https://img.shields.io/github/stars/APIBrasil/dialogflow-myzap?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/network/members"><img title="Forks" src="https://img.shields.io/github/forks/APIBrasil/dialogflow-myzap?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/watchers"><img title="Watching" src="https://img.shields.io/github/watchers/APIBrasil/dialogflow-myzap?label=Watchers&color=green&style=flat-square"></a>
</p>

<hr />

### 💸 Get informations and servers
_Get your token with connect in server Whatsapp API and DialogFlow_

[APIGratis](https://apigratis.com.br) | [DialogFlow](https://dialogflow.cloud.google.com) | [💬 Group WhatsApp](https://chat.whatsapp.com/EkbDMTX9Y1Y30NZlYGZBar)

### 💉 Install dependencies
_Installing composer and other dependencies_

```bash
cp .env.example .env
```

```bash
composer install
```

### 🪟 Using ngrok for windows (optional) 
_If you want to run the webhook with ssl or on an external network_

```bash
.\ngrok.exe http 80
```

### 🔌 Run webhook
_Your default, internal webhook address_

```bash
php -S localhost:80 .\WebHook.php
```

### 💻 Start new session WhatsApp (QRCode Reader)
_The session name and session key must be the same, and the api token must be obtained from the website_

https://homologacao.wppserver.com/start

```bash
session_name: session_demo
```

```bash
session_name: session_demo
```

```bash
api_token: Solicite ao APIGratis
```

<hr />

### 🎉 Default address webhook 
_Your default user address webhook_

```bash
http://localhost:80/webhook
```

### 🔑 Download credentials.json
_Downloading your Google Auth credentials_

[https://console.cloud.google.com](https://console.cloud.google.com/projectselector2/iam-admin/serviceaccounts?supportedpurview=project)

### ✨ Contribuidores: 
_Obrigado a essas pessoas maravilhosas_

<table>
  <tr>
    <td align="center"><a href="https://github.com/jhowbhz"><img src="https://avatars.githubusercontent.com/u/31408451?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Jonathan Henrique</b></sub></a><br />
    </td>
    <td align="center"><a href="https://github.com/bruno-hashimoto"><img src="https://avatars.githubusercontent.com/u/15908424?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Bruno Hashimoto</b></sub></a><br />
    </td>
  </tr>
</table>
