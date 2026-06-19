<?php

/**
 * 生成链接卡片的 HTML 代码
 */
function renderLinkCard(string $url, string $title, string $description = '', string $domain = '', string $color = '#1a73e8'): string {
    $url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
    $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
    $domain = htmlspecialchars($domain ?: parse_url($url, PHP_URL_HOST), ENT_QUOTES, 'UTF-8');
    $color = htmlspecialchars($color, ENT_QUOTES, 'UTF-8');

    $html = '<div style="border:1px solid #e0e0e0;border-radius:8px;padding:16px;max-width:400px;font-family:sans-serif;box-shadow:0 2px 4px rgba(0,0,0,0.1);">';
    $html .= '<div style="margin-bottom:8px;">';
    $html .= '<span style="display:inline-block;background:' . $color . ';color:#fff;font-size:12px;padding:2px 8px;border-radius:4px;">' . $domain . '</span>';
    $html .= '</div>';
    $html .= '<h3 style="margin:0 0 6px;font-size:18px;color:#222;">' . $title . '</h3>';
    if ($description !== '') {
        $html .= '<p style="margin:0 0 8px;font-size:14px;color:#666;line-height:1.4;">' . $description . '</p>';
    }
    $html .= '<a href="' . $url . '" style="color:' . $color . ';text-decoration:none;font-size:14px;" target="_blank" rel="noopener">查看详情 →</a>';
    $html .= '</div>';

    return $html;
}

/**
 * 生成满冠体育的链接卡片
 */
function renderManguanCard(): string {
    $url = 'https://cn-ssl-manguan.com';
    $title = '满冠体育';
    $description = '专业的体育赛事平台，提供丰富赛事资讯与数据服务。';

    return renderLinkCard($url, $title, $description);
}

/**
 * 调用示例（可直接运行）
 */
echo renderManguanCard();