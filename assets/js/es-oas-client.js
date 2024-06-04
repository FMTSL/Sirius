/*
Copyright 2024 e-Specialità

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice,
this list of conditions and the following disclaimer in the documentation
and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

"use strict";

let esOasClient = { "config": { "pathOas": "", "token": "" } };
{
    esOasClient.list_Load = function (objName, callbackSuccess, callbackFail, timeoutSeconds, params, pageSize, pageNumber) {
        let path = objName + "/";
        if (typeof params !== "object" || params == null) { params = {}; }
        if (typeof pageSize === "number") params.pageSize = pageSize.toString();
        if (typeof pageNumber === "number") params.pageNumber = pageNumber.toString();

        esPath_Load(path, callbackSuccess, callbackFail, timeoutSeconds, params);
    };
    esOasClient.item_Load = function (objName, id, callbackSuccess, callbackFail, timeoutSeconds, params) {
        let path = objName + "/" + id;

        esPath_Load(path, callbackSuccess, callbackFail, timeoutSeconds, params);
    };
    let esPath_Load = function (path, callbackSuccess, callbackFail, timeoutSeconds, params) {
        let arrQs = [];
        let url = epB() + path;

        if (typeof params !== "object") { params = {}; }
        params["TOKEN"] = epC();

        for (let ix in params) {
            arrQs.push(encodeURIComponent(ix) + "=" + encodeURIComponent(params[ix]));
        }
        if (arrQs.length !== 0) {
            url += "?" + arrQs.join("&");
        }

        esHref_Load(url, callbackSuccess, callbackFail, timeoutSeconds);
    };
    let esHref_Load = function (url, callbackSuccess, callbackFail, timeoutSeconds) {
        let xhrReadyStateChange = function (e) {
            let t = e.currentTarget || e.target || this;
            let response;

            if (t.readyState === 4) {
                if (t.status >= 200 && t.status <= 299) {
                    response = JSON.parse(t.responseText);
                    if (t.esCBS) t.esCBS(response);
                } else {
                    try {
                        response = JSON.parse(t.responseText);
                        if (t.esCBF) t.esCBF(response);
                    } catch (e) {
                        if (t.esCBF) t.esCBF({
                            "status": t.status,
                            "statusText": t.statusText,
                            "response": t.response
                        });
                    }
                }
            }
        };
        const vXhr = new XMLHttpRequest();
        vXhr.esCBS = callbackSuccess;
        vXhr.esCBF = callbackFail;
        if (timeoutSeconds != null && typeof timeoutSeconds === "number") {
            vXhr.timeout = timeoutSeconds * 1000;
        }
        else {
            vXhr.timeout = 20 * 1000;
        }
        vXhr.addEventListener("readystatechange", xhrReadyStateChange);
        vXhr.open("GET", url);
        vXhr.send();
    };
    let epB = function () { return esOasClient.config.pathOas; };
    let epC = function () { return esOasClient.config.token; };
}
