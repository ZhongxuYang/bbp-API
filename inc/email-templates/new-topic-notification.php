<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e9ecef;
            border-radius: 5px;
        }
        .footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            font-size: 12px;
            color: #6c757d;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        .topic-content {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .topic-content p {
            margin: 0 0 1em;
        }
        .topic-content p:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>新话题通知</h2>
    </div>

    <div class="content">
        <p>您好，</p>

        <p>用户 <strong><?php echo esc_html($author_name); ?></strong> 在论坛 <strong><?php echo esc_html($forum_title); ?></strong> 中发布了新话题：</p>

        <h3><?php echo esc_html($title); ?></h3>

        <div class="topic-content">
            <?php echo wpautop($content); ?>
        </div>

        <!-- <a href="<?php echo esc_url($topic_url); ?>" class="button">查看话题</a> -->
    </div>

    <div class="footer">
        <p>此邮件由系统自动发送，请勿回复。</p>
    </div>
</body>
</html>
