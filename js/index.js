const validate = () => {
  let sliderCheck = document.getElementById('slider-check').checked;
  if (sliderCheck) {
    document.getElementById('h1-title').classList.add('hidden');
    document.getElementById('h1-title-cloudflare').classList.remove('hidden');
    document.getElementById('cloud-copy').style.background = '#F8AA67';
    document.getElementById('cloud-left').style.background = '#F8AA67';
    document.getElementById('cloud-right').style.background = '#F8AA67';
    document.getElementById('cloud-bottom').style.background = '#F8AA67';
    document.getElementById('frown').classList.add('invisible');
    document.getElementById('tear-left').classList.add('invisible');
    document.getElementById('tear-right').classList.add('invisible');
    document.getElementById('eyebrow-left').classList.remove('invisible');
    document.getElementById('eyebrow-right').classList.remove('invisible');
    document.getElementById('smile').classList.remove('invisible');
    document.getElementById('bolt-left').classList.remove('invisible');
    document.getElementById('bolt-right').classList.remove('invisible');
    document.getElementById('bolt-bottom').classList.remove('invisible');
  } else {
    document.getElementById('h1-title-cloudflare').classList.add('hidden');
    document.getElementById('h1-title').classList.remove('hidden');
    document.getElementById('cloud-copy').style.background = 'white';
    document.getElementById('cloud-copy').style.background = 'white';
    document.getElementById('cloud-left').style.background = 'white';
    document.getElementById('cloud-right').style.background = 'white';
    document.getElementById('cloud-bottom').style.background = 'white';
    document.getElementById('frown').classList.remove('invisible');
    document.getElementById('tear-left').classList.remove('invisible');
    document.getElementById('tear-right').classList.remove('invisible');
    document.getElementById('eyebrow-left').classList.add('invisible');
    document.getElementById('eyebrow-right').classList.add('invisible');
    document.getElementById('smile').classList.add('invisible');
    document.getElementById('bolt-left').classList.add('invisible');
    document.getElementById('bolt-right').classList.add('invisible');
    document.getElementById('bolt-bottom').classList.add('invisible');
  }
};