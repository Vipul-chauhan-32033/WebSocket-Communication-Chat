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

app/ <br>
├── Events/MessageCreated.php <br>
├── Http/Controllers/ChatController.php <br>
├── Http/Controllers/MessageController.php <br>
├── Listeners/SendNewMessageNotification.php <br>
└── Models/Message.php <br>
database/ <br>
└── migrations/create_messages_table.php <br>
resources/ <br>
├── views/chat.blade.php <br>
└── js/bootstrap.js (Echo config) <br>
routes/ <br>
├── web.php <br>
└── channels.php <br>

---

## 🛠 Installation

### 1. Clone repo

```bash
git clone https://github.com/Vipul-chauhan-32033/WebSocket-Communication-Chat.git
cd WebSocket-Communication-Chat
```
