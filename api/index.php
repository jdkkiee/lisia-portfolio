<?php

// Pastikan lokasi direktori sementara dikonfigurasi ke /tmp agar Vercel tidak error saat menulis cache
$_ENV['APP_STORAGE_PATH'] = '/tmp/storage';

// Forward request ke file public/index.php
require __DIR__ . '/../public/index.php';