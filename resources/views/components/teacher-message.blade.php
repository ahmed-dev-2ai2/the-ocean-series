<div id="teacher-message">

    <div class="message-card">

        <div class="message-header">

            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">

            <span>THE OCEAN SERIES</span>

        </div>

        <div id="typing-text"></div>

        <button id="start-btn">

            ابدأ رحلتك التعليمية

        </button>

    </div>

</div>

<script>

const message="أهلاً وسهلاً بكم في منصة سلسلة المحيط التعليمية 🌊\n\nأنا مستر عبدالسلام رضوان.\nيسعدني انضمامكم معنا.\nوأتمنى لكم رحلة تعليمية مليئة بالنجاح والتفوق بإذن الله.";

let i=0;

function typing(){

    if(i<message.length){

        document.getElementById("typing-text").innerHTML+=message.charAt(i);

        i++;

        setTimeout(typing,35);

    }

}

window.onload=typing;

</script>