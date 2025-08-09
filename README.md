# EBot Telegram API Helper

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Telegram-2CA5E0?style=for-the-badge&logo=telegram&logoColor=white" alt="Telegram">
</p>

EBot - это элегантный Laravel-пакет для работы с Telegram Bot API, который делает интеграцию Telegram ботов простой и приятной.

## 🌟 Особенности

- **Интуитивный API** - Простые и понятные методы для всех операций
- **Полная поддержка Telegram API**:
  - ✉️ Отправка и редактирование сообщений
  - 🌐 Работа с вебхуками
  - 🎛️ Управление inline-кнопками
  - 🔄 Обработка callback-запросов
- **Гибкость** - Поддержка нескольких ботов в одном приложении
- **Laravel-интеграция** - Сервис-провайдер и фасад из коробки
- **Современный код** - PHP 8+ с строгой типизацией

## 🚀 Быстрый старт

### Установка

1. Установите пакет через Composer:

```bash
composer require djammix/ebot
```

2. Опубликуйте конфигурационный файл:

```bash
php artisan vendor:publish --provider="DJammix\EBot\EBotServiceProvider" --tag="config"
```

3. Добавьте в ваш .env:

```bash
TELEGRAM_MAIN_BOT_TOKEN=your_bot_token_here
TELEGRAM_LOG_CHANNEL=telegram  # Опционально: канал для логов
```

## 🧩 Основные возможности

### 📨 Отправка сообщений

```bash
use DJammix\EBot\Facades\EBot;

// Простое текстовое сообщение
EBot::sendMessage(chatId: 123456, text: 'Hello World!');

// Сообщение с Markdown-форматированием
EBot::sendMessage(
    chatId: '@channel_username',
    text: '*Приветствие* от _EBot_!',
    parseMode: 'MarkdownV2'
);
```

### 🌐 Управление вебхуками

```bash
// Установка вебхука
EBot::setWebhook(
    url: 'https://yourdomain.com/telegram/webhook',
    secretToken: 'your_secret_key'
);

// Получение информации о вебхуке
$webhookInfo = EBot::getWebhookInfo();
```

### 🛠 Расширенные функции

```bash
// Редактирование сообщения
EBot::editMessageText(
    chatId: 123456,
    messageId: 42,
    text: 'Обновленный текст'
);

// Работа с клавиатурами
EBot::sendMessage(
    chatId: 123456,
    text: 'Выберите действие:',
    replyMarkup: [
        'inline_keyboard' => [
            [['text' => 'Кнопка 1', 'callback_data' => 'action1']],
            [['text' => 'Кнопка 2', 'callback_data' => 'action2']]
        ]
    ]
);
```