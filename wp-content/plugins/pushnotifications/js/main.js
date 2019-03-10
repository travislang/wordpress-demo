console.log('loaded main.js');

const checkForServiceWorker = () => {
    if (!('serviceWorker' in navigator)) {
        throw new Error('No Service Worker support!')
    }
    if (!('PushManager' in window)) {
        throw new Error('No Push API Support!')
    }
}

const registerServiceWorker = async () => {
    const swRegistration = await navigator.serviceWorker.register('sw.js');
    return swRegistration;
}

const main = async () => {
    checkForServiceWorker();
    const swRegistration = await registerServiceWorker();
}
