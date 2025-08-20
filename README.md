# 💬 Laravel Realtime Chat (WebSockets)

A real-time chat application built with **Laravel (latest)**, **BeyondCode Laravel WebSockets**, and **Laravel Echo**.  
Supports user authentication, instant messaging, presence channels (who’s online), typing indicators, and database-stored messages — all without refreshing the page. 🚀

---

## ✨ Features

-   🔑 User authentication (Laravel Breeze)
-   💬 Real-time chat between authenticated users
-   👀 Presence channel (see who’s online)
-   ⌨️ Typing indicator with client whispers
-   🗄 Messages stored in MySQL
-   🔔 Notifications for new messages
-   ⚡ Powered by Laravel WebSockets (no Node.js required)

---

# 📂 Project Structure

app/
├── Events/MessageCreated.php
├── Http/Controllers/ChatController.php
├── Http/Controllers/MessageController.php
├── Listeners/SendNewMessageNotification.php
└── Models/Message.php
database/
└── migrations/create_messages_table.php
resources/
├── views/chat.blade.php
└── js/bootstrap.js (Echo config)
routes/
├── web.php
└── channels.php

---

## 🛠 Installation

### 1. Clone repo

```bash
git clone https://github.com/Vipul-chauhan-32033/WebSocket-Communication-Chat.git
cd WebSocket-Communication-Chat
```
