// controllers/uploadController.js
const { uploadFileToR2 } = require('../services/uploadService');

const uploadFile = async (req, res) => {
  try {
    if (!req.file) {
      return res.status(400).json({ message: 'من فضلك اختر صورة أو فيديو' });
    }

    const fileUrl = await uploadFileToR2(req.file);
    
    res.status(200).json({
      success: true,
      message: 'تم رفع الملف بنجاح',
      url: fileUrl
    });
  } catch (error) {
    res.status(500).json({ success: false, message: error.message });
  }
};

module.exports = { uploadFile };