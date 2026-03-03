<?php
// index.php — 多媒體程式設計學習目標展示
$objectives = [
    "能描述多媒體系統的主要元素（影像、音訊、動畫、互動）",
    "理解常見檔案格式與編碼（JPEG/PNG、MP3/WAV、H.264/HEVC）",
    "解釋有損與無損壓縮基本原理及其適用情境",
    "能使用程式載入、顯示、裁切與簡單濾鏡處理影像檔案",
    "能用程式讀取、播放、剪輯與調整音量或淡入淡出效果",
    "能實作影像與音訊的基本同步播放（例如影片播放）",
    "了解串流概念，能實作基礎串流與處理延遲的策略",
    "能設計並實作基本互動（事件處理、使用者介面與輸入回饋）",
    "能評估多媒體應用的可用性與使用者體驗（UX）考量",
    "能獨立完成一個包含影像、音訊與互動要素的整合專案",
    "能測量並優化多媒體應用的效能（檔案大小、載入時間、CPU/GPU 使用）",
    "能在團隊中協作，理解著作權、授權與多媒體倫理議題"
];

$evaluations = [
    "小實作：影像或音訊處理功能",
    "期中專題：同步播放或互動媒體小系統",
    "期末專案：整合型專案（技術說明與使用者測試報告）",
    "書面測驗：概念與壓縮原理"
];
?>
<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>多媒體程式設計 — 學習目標</title>
  <style>
    body{font-family:Segoe UI, Roboto, "Noto Sans TC", Arial;max-width:900px;margin:28px auto;color:#222}
    h1{color:#0b64a0}
    ul{line-height:1.8}
    .section{margin-bottom:20px}
    .note{color:#555;font-size:0.95em}
  </style>
</head>
<body>
  <h1>多媒體程式設計 — 學習目標</h1>
  <p class="note">下列目標適用於課堂學習與小型專案評量。</p>

  <div class="section">
    <h2>核心能力</h2>
    <ul>
      <?php foreach($objectives as $o): ?>
        <li><?php echo htmlspecialchars($o, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="section">
    <h2>評量方式（建議）</h2>
    <ul>
      <?php foreach($evaluations as $e): ?>
        <li><?php echo htmlspecialchars($e, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <footer class="note">可將此頁作為課程首頁或整合到 README.md。</footer>
</body>
</html>

