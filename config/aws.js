// src/config/aws.js
require('dotenv').config();
const AWS = require('aws-sdk');

// إعدادات الاتصال بـ Cloudflare R2
const s3 = new AWS.S3({
  endpoint: process.env.R2_ENDPOINT, // الرابط اللي حطيته في الـ env
  accessKeyId: process.env.R2_ACCESS_KEY,
  secretAccessKey: process.env.R2_SECRET_ACCESS_KEY,
  region: process.env.R2_REGION || 'auto', // غالباً auto
  signatureVersion: 'v4',
});

// دالة التحقق من الاتصال (اختياري بس مهم عشان تتطمن)
const testConnection = async () => {
  try {
    await s3.listBuckets().promise();
    console.log('✅ تم الاتصال بـ Cloudflare R2 بنجاح');
  } catch (error) {
    console.error('❌ فشل الاتصال بـ R2: ', error.message);
  }
};

module.exports = { s3, testConnection };