<div onclick="ScrollTopTop()" class="upward"></div>
<style>
.upward{
    z-index: 1;
    position: fixed;
    bottom: 40px;
    right: 40px;
    width: 55px;
    height: 55px;
    cursor: pointer;
    background: url('/vector/button.png');
    background-size: cover;
    visibility: hidden;
    opacity: 0;
    transition: 0.5s;
    &.active{
            visibility: visible;
            opacity: 1;
    }
}</style>
<script>
    window.addEventListener('scroll' , function(){
        var scroll = document.querySelector('.upward');
        scroll.classList.toggle('active' , window.scrollY > 500);
    })
    function ScrollTopTop(){
        window.scrollTo({
            behavior: 'smooth',
            top:0, 
        })
    }
</script>

