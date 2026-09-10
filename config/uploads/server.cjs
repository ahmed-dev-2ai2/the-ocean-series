// routes/uploadRoutes.js
const express = require('express');
const router = express.Router();
const upload = require('../config/multerConfig');
const { uploadFile } = require('../controllers/uploadController');

// مسار الرفع (POST)
router.post('/upload', upload.single('media'), uploadFile);

module.exports = router;