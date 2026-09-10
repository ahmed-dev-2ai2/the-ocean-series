// config/multerConfig.js
const multer = require('multer');
const path = require('path');

// التخزين المؤقت للصورة في جهاز السيرفر قبل رفعها للسحابة
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads/'); // تأكد إنك عملت مجلد uploads جوه المشروع
  },
  filename: (req, file, cb) => {
    // بنسمي الفايل باسم فريد + التاريخ عشان ما يحصلش تكرار
    const uniqueSuffix = Date.now() + '-' + Math.round(Math.random() * 1E9);
    cb(null, file.fieldname + '-' + uniqueSuffix + path.extname(file.originalname));
  }
});

// فلترة نوع الملفات (مسموح صور وفيديو فقط)
const fileFilter = (req, file, cb) => {
  if (file.mimetype.startsWith('image/') || file.mimetype.startsWith('video/')) {
    cb(null, true);
  } else {
    cb(new Error('يُسمح فقط بصور وفيديو!'), false);
  }
};

const upload = multer({ 
  storage: storage,
  limits: { fileSize: 50 * 1024 * 1024 }, // حد أقصى 50 ميجابايت
  fileFilter: fileFilter
});

module.exports = upload;