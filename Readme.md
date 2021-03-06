# ๐คSimple Bot Google DialogFlow and APIGratis
_This is a small demonstration of how to create a bot with DialogFlow using APIGratis or MyZap Free or Premium_

<p align="left">
<a href="https://github.com/jhowbhz/followers"><img title="Seguidores" src="https://img.shields.io/github/followers/jhowbhz?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/stargazers/"><img title="Estrelas" src="https://img.shields.io/github/stars/APIBrasil/dialogflow-myzap?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/network/members"><img title="Forks" src="https://img.shields.io/github/forks/APIBrasil/dialogflow-myzap?color=green&style=flat-square"></a>
<a href="https://github.com/APIBrasil/dialogflow-myzap/watchers"><img title="Watching" src="https://img.shields.io/github/watchers/APIBrasil/dialogflow-myzap?label=Watchers&color=green&style=flat-square"></a>

[<img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white">](https://documenter.getpostman.com/view/11074732/UzBpJkM9/)
[<img src="https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white">](https://chat.whatsapp.com/EkbDMTX9Y1Y30NZlYGZBar)
 
<hr />

### ๐ธ Get informations and servers
_Get your token with connect in server Whatsapp API and DialogFlow_

[APIGratis](https://apigratis.com.br) | [DialogFlow](https://dialogflow.cloud.google.com) | [๐ฌ Group WhatsApp](https://chat.whatsapp.com/EkbDMTX9Y1Y30NZlYGZBar)

### ๐ Install dependencies
_Up container Docker to run WebHook_

```bash
apt update && apt install docker-compose && cd /opt/
```

```bash
git clone https://github.com/APIBrasil/dialogflow-myzap.git dialogflow-myzap
```

```bash
cd /opt/dialogflow-myzap
```

```bash
docker-compose build --no-cache
docker-compose up -d
```

### ๐ Using ngrok for Linux (optional) 
_If you want to run the webhook with ssl or on an external network_

```sh
 curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null && echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list && sudo apt update && sudo apt install ngrok
```

To Run
```sh
cd /opt/dialogflow-myzap
ngrok http 80
```

![imagem](https://i.imgur.com/0Mwl1tv.png)

### ๐ Using ngrok for Windows (optional) 

```sh
cd c:\www\dialogflow-myzap
.\ngrok.exe http 80
```

### ๐ Default address webhook 
_Your default user address webhook_

```sh
https://YOUR_HOST_VPN.ngrok.io/webhook
```
<hr />

### ๐ป Start new session WhatsApp (QRCode Reader)
_The session name and session key must be the same, and the api token must be obtained from the website_

https://homologacao.wppserver.com/start

| Input | Value |
| ------ | ------ |
| Session name | session_demo |
| Session key | session_demo |
| Webhook Messages | https://YOUR_HOST_VPN.ngrok.io/webhook |

### ๐ Download credentials.json
_To downloading your file credentials.json, generate Key in Google Console crendentials_

https://console.cloud.google.com/projectselector2/iam-admin/serviceaccounts?supportedpurview=project

<div>
<img src="https://i.imgur.com/lOJOsam.png" width="50%" /> <img src="https://i.imgur.com/6Pp8dTh.png" width="50%" />
</div>

### โจ Contributors: 
_Thanks to these wonderful people_

<table>
  <tr>
    <td align="center"><a href="https://github.com/jhowbhz"><img src="https://avatars.githubusercontent.com/u/31408451?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Jonathan Henrique</b></sub></a><br />
    </td>
    <td align="center"><a href="https://github.com/bruno-hashimoto"><img src="https://avatars.githubusercontent.com/u/15908424?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Bruno Hashimoto</b></sub></a><br />
    </td>
  </tr>
</table>

### License

MIT
