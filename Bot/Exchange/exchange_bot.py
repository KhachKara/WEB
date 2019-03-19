import requests
import json


def connect_to_stream():
    try:
        s = requests.Session()
        url = "https://stream-fxpractice.oanda.com/"
        headers = {'Authorization': 'Bearer ' + "5929175bfca498f7896a6fe16ba778df-1003c28e0776bb8c5b62e1f6645b6c83",
               # 'X-Accept-Datetime-Format' : 'unix'
               }
        params = {'instruments': "EUR_USD,AUD_JPY", 'accountId': "101-004-6617564-001"}
        req = requests.Request('GET', url, headers=headers, params=params)
        pre = req.prepare()
        resp = s.send(pre, stream=True, verify=False, timeout=20)
        return resp
    except Exception as e:
        s.close()
        print("Caught exception when connecting to stream\n" + str(e))


    try: #infinite loop on receiving events about price. on each tick Strategy function is called
         for line in response.iter_lines(1):
             if line:
                 msg = json.loads(line)
                 if msg.has_key("instrument") or msg.has_key("tick"):
                       strategy(msg['tick']['instrument'], msg['tick']['time'], msg['tick']['ask'])
    except Exception as e:
         print("something gone bad " +str(e))
         return
