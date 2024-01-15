

anime.set('#bt_whatsapp_message',
{
    translateX: 500,
});
anime({
  targets: '#bt_whatsapp_message',
  delay:10000,
  translateX: [
    {value: 0, duration: 250},
    {value: 500, duration: 250, delay:5000},
],
    easing: 'easeInOutQuad',
    loop: true,
});