if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('../js/sw.js').then( () => {
        console.log('Service Worker Registered')
      })
    })
  }