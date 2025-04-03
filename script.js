
function additional() {
    const userAgent = navigator.userAgent;
let browserName, browserVersion;

if (/EdgA/.test(userAgent)) {
    browserName = "Edge (Android)";
} else if (/EdgiOS/.test(userAgent)) {
    browserName = "Edge (iOS)";
} else if (/Edg/.test(userAgent)) {
    browserName = "Edge";
} else if (/Chrome/.test(userAgent)) {
    browserName = "Chrome";
} else if (/Firefox/.test(userAgent)) {
    browserName = "Firefox";
} else if (/Safari/.test(userAgent)) {
    browserName = "Safari";
} else if (/Opera|OPR/.test(userAgent)) {
     browserName = "Opera";
} else if (/MSIE|Trident/.test(userAgent)) {
    browserName = "Internet Explorer";
} else {
    browserName = "Unknown";
}

const versionMatch = userAgent.match(/(chrome|firefox|safari|opera|msie|trident|edge|edga|edgios)\/?\s*(\d+(\.\d+)*)/i);

if (versionMatch && versionMatch[2]) {
    browserVersion = versionMatch[2];
} else {
    browserVersion = "Unknown";
}

return [browserName, browserVersion]
}

function os() {
    var OSName = "Unknown";
if (window.navigator.userAgent.indexOf("Windows NT 10.0")!= -1) OSName="Windows 10";
if (window.navigator.userAgent.indexOf("Windows NT 6.3") != -1) OSName="Windows 8.1";
if (window.navigator.userAgent.indexOf("Windows NT 6.2") != -1) OSName="Windows 8";
if (window.navigator.userAgent.indexOf("Windows NT 6.1") != -1) OSName="Windows 7";
if (window.navigator.userAgent.indexOf("Windows NT 6.0") != -1) OSName="Windows Vista";
if (window.navigator.userAgent.indexOf("Windows NT 5.1") != -1) OSName="Windows XP";
if (window.navigator.userAgent.indexOf("Windows NT 5.0") != -1) OSName="Windows 2000";
if (window.navigator.userAgent.indexOf("Mac")            != -1) OSName="Mac/iOS";
if (window.navigator.userAgent.indexOf("X11")            != -1) OSName="UNIX";
if (window.navigator.userAgent.indexOf("Linux")          != -1) OSName="Linux";
return OSName
}

async function tel() {

    let info = {
        width: window.screen.width,
        height: window.screen.height,
        browserLanguage: navigator.language,
        systemLanguage: navigator.systemLanguage,
        userLanguage: navigator.userLanguage,
        oscpu: navigator.oscpu,
        browser: additional(),
        os: navigator.platform,
    }
    
    let result = await fetch('sodium.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(info)
    })

    console.log(result.status)
}

(async () => tel())()