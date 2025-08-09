EBot - это удобный Laravel-пакет для работы с Telegram Bot API, который упрощает интеграцию Telegram-бота в ваше приложение.

🔥 Особенности
Простота использования - понятный API с удобными методами

Поддержка основных функций Telegram Bot API:

Отправка и редактирование сообщений

Работа с вебхуками

Управление inline-кнопками

Обработка callback-запросов

Гибкая конфигурация - поддержка нескольких ботов

Интеграция с Laravel - сервис-провайдер и фасад для удобного использования

Современный код - PHP 8+, строгая типизация

📦 Установка
Установите пакет через Composer:

bash
composer require your-vendor/ebot-telegram
Опубликуйте файл конфигурации:

bash
php artisan vendor:publish --provider="YourVendor\EBotTelegram\EBotServiceProvider" --tag="ebot-config"
⚙️ Конфигурация
Добавьте в ваш .env:

env
TELEGRAM_TASK_BOT_TOKEN=your_task_bot_token
TELEGRAM_AUTH_BOT_TOKEN=your_auth_bot_token
🚀 Использование
Отправка сообщения
php
use YourVendor\EBotTelegram\Facades\EBot;

EBot::sendMessage(
    chatId: '@your_channel', 
    text: 'Hello from EBot!',
    parseMode: 'HTML'
);
Настройка вебхука
php
EBot::setWebhook(
    url: 'https://your-domain.com/telegram/webhook',
    token: config('ebot.bot_token.auth_bot')
);
Редактирование сообщения
php
EBot::editMessageText(
    chatId: $chatId,
    messageId: $messageId,
    text: 'Updated message text',
    parseMode: 'MarkdownV2'
);
📚 Доступные методы
Метод	Описание
sendMessage()	Отправка сообщения
setWebhook()	Установка вебхука
deleteWebhook()	Удаление вебхука
getWebhookInfo()	Получение информации о вебхуке
editMessageText()	Редактирование текста сообщения
editMessageReplyMarkup()	Редактирование клавиатуры сообщения
answerCallbackQuery()	Ответ на callback-запрос от inline-кнопки
🤝 Поддержка нескольких ботов
Пакет поддерживает работу с несколькими ботами через конфигурацию:

php
// Использование основного бота
EBot::sendMessage(chatId: '@channel', text: 'Hello');

// Использование конкретного токена
EBot::sendMessage(
    chatId: '@channel', 
    text: 'Hello',
    token: 'your_specific_bot_token'
);