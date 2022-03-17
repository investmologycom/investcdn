if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js').then(registration => {
      }).catch(registrationError => {
        console.log('SW registration failed: ', registrationError);
      });
    });
  }