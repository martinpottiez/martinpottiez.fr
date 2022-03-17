$(function ()
{
  $('nav a, .a-button').on('click',function(){
    var page = $(this).attr('href');
    var speed = 750;
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed );
  });

  var $elements = $('.black div div, .project');
  $elements.css('visibility',"hidden");
  $elements.each(function(){

    var $self = $(this);
    $self.data('animating', false);

    $(window).scroll(function(){

      if($self.visible() && $self.css('visibility') == 'hidden' && $self.data('animating') == false)
      {
        $self.data('animating',true);
        $self.css('visibility','visible').hide().fadeIn("slow", function(){
          $self.data('animating',false);
        });
      }
    });

  });

  $(window).on("load scroll", function() {
    var parallaxElement = $(".parallax"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function() {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
          if(currentElement.is('.bot'))
          {
            currentElement.css({
              transform: "translate3d(0," + scrolled * -0.25 + "px, 0)"
            });
          }
          else
          {
            currentElement.css({
              transform: "translate3d(0," + scrolled * +0.25 + "px, 0)"
            });
          }
      }
    });
  });

    class TextScramble
    {
      constructor(el)
      {
      this.el = el
      this.chars = '!<>-_\\/[]{}—=+*^?#________'
      this.update = this.update.bind(this)
      }
      setText(newText)
      {
        const oldText = this.el.innerText
        const length = Math.max(oldText.length, newText.length)
        const promise = new Promise((resolve) => this.resolve = resolve)
        this.queue = []
        for (let i = 0; i < length; i++)
        {
          const from = oldText[i] || ''
          const to = newText[i] || ''
          const start = Math.floor(Math.random() * 40)
          const end = start + Math.floor(Math.random() * 40)
          this.queue.push({ from, to, start, end })
        }
        cancelAnimationFrame(this.frameRequest)
        this.frame = 0
        this.update()
        return promise
      }
      update()
      {
        let output = ''
        let complete = 0
        for (let i = 0, n = this.queue.length; i < n; i++) {
          let { from, to, start, end, char } = this.queue[i]
          if (this.frame >= end) {
            complete++
            output += to
          } else if (this.frame >= start) {
            if (!char || Math.random() < 0.28) {
              char = this.randomChar()
              this.queue[i].char = char
            }
            output += `<span class="dud">${char}</span>`
          } else {
            output += from
          }
        }
        this.el.innerHTML = output
        if (complete === this.queue.length)
        {
          this.resolve()
        } else
        {
          this.frameRequest = requestAnimationFrame(this.update)
          this.frame++
        }
    }
    randomChar()
    {
      return this.chars[Math.floor(Math.random() * this.chars.length)]
    }
}


const phrases = 'Martin'
const el = document.querySelector('.scramble')
const fx = new TextScramble(el)
const next = () =>
{
    fx.setText(phrases);
}
next();
  // else
  // {
  //   fx.setText(phrases[counter]).then(() =>
  //   {
  //     setTimeout(next, 800)
  //   })
  //   counter = (counter + 1) % phrases.length
  // }

const title = "Projects";
const sl = document.querySelector('.scramble-title')
const sx = new TextScramble(sl)
var al = true;
const nxt = () =>
{
  if(al)
  sx.setText(title);
}

$(window).scroll(function(){
if($('.scramble-title').visible())
{
  nxt();
  al = false;
}
});

$('#contact-submit').click(function(e){
  e.preventDefault();
  $.post(
    'php/contact.php',
    {
      name : $('#contact-nom').val(),
      surname : $('#contact-prenom').val(),
      mail : $('#contact-mail').val(),
      message : $('#contact-message').val()
    },

    function(data){
      $('#contact-info').html(data);
      $('#contact-nom').val('');
      $('#contact-prenom').val('');
      $('#contact-mail').val('');
      $('#contact-message').val('');
    },
    'text'
  );
});
});
