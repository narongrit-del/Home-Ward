<?php
 $LINEData = file_get_contents('php://input');
 $jsonData = json_decode($LINEData,true);
 $replyToken = $jsonData["events"][0]["replyToken"];
 $text = $jsonData["events"][0]["message"]["text"];
 
 function sendMessage($replyJson, $token){
         $ch = curl_init($token["URL"]);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLINFO_HEADER_OUT, true);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
             'Content-Type: application/json',
             'Authorization: Bearer ' . $token["AccessToken"])
             );
         curl_setopt($ch, CURLOPT_POSTFIELDS, $replyJson);
         $result = curl_exec($ch);
         curl_close($ch);
   return $result;
 }
 
 if ($text == "จองคิวรับการรักษา"){
     $message = '{
     "type" : "sticker",
     "packageId" : 11537,
     "stickerId" : 52002744
     }';
     $replymessage = json_decode($message);
 }
 else if ($text == "ร้องเรียนปัญหา"){
   $message = '{
  "type": "flex",
  "altText": "Flex Message",
  "contents": {
    "type": "carousel",
    "contents": [
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "4xl",
              "url": "https://sv1.picz.in.th/images/2023/01/10/Js5XdP.png"
            },
            {
              "type": "button",
              "action": {
                "type": "uri",
                "label": "ร้องเรียนร้องทุกข์",
                "uri": "https://www.wadprik.go.th/contact4.php"
              },
              "margin": "xs",
              "style": "secondary",
              "color": "#ccffff",
              "height": "sm"
            },
            {
              "type": "button",
              "action": {
                "type": "uri",
                "uri": "https://www.wadprik.go.th/contact5.php",
                "label": "ช่องรับฟังความคิดเห็น"
              },
              "margin": "md",
              "style": "secondary",
              "height": "sm",
              "color": "#ccffff"
            }
          ]
        }
      }
    ]
  }
}';
     $replymessage = json_decode($message);
 }
 
 else if ($text == "ปฐมพยาบาล"){
   $message = '{
  "type": "flex",
  "altText": "Flex Message",
  "contents": {
    "type": "carousel",
    "contents": [
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "full",
              "url": "https://sv1.picz.in.th/images/2023/01/04/J5psFQ.png"
            }
          ],
          "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://youtu.be/bi9IA3Xbg60"
          }
        }
      },
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "full",
              "url": "https://sv1.picz.in.th/images/2023/01/04/J5puln.png",
              "action": {
                "type": "uri",
                "label": "action",
                "uri": "https://youtu.be/ku-nL2alfjw"
              }
            }
          ],
          "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://youtu.be/ku-nL2alfjw"
          }
        }
      },
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "full",
              "url": "https://sv1.picz.in.th/images/2023/01/04/J5p6Gg.png"
            }
          ],
          "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://youtu.be/IzAymIQSlOI"
          }
        }
      },
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "full",
              "url": "https://sv1.picz.in.th/images/2023/01/04/J5prfW.png"
            }
          ],
          "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://youtu.be/gHE9vVwllYo"
          }
        }
      },
      {
        "type": "bubble",
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "size": "full",
              "url": "https://sv1.picz.in.th/images/2023/01/04/J5p8q2.png"
            }
          ],
          "action": {
            "type": "uri",
            "label": "action",
            "uri": "https://youtu.be/jb8w7-Oa3nU"
          }
        }
      }
    ]
  }
}';
     $replymessage = json_decode($message);
 }
 
 else if ($text == "คำถามที่พบบ่อย"){
    $message = '{
      "type": "flex",
      "altText": "Flex Message",
      "contents": {
        "type": "bubble",
        "header": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "text",
              "text": "คำถามที่พบบ่อย",
              "align": "center",
              "size": "xxl",
              "margin": "none",
              "weight": "bold"
            }
          ],
          "spacing": "none",
          "backgroundColor": "#00b3b3"
        },
        "body": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "image",
              "url": "https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/35132832_273231176755788_122310691381051392_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGXZC0B35rOb3fQwZkaXmyhtCvVCsqJg_G0K9UKyomD8Te3YlMRT6MXGgWT09AOnheUF0c-ht8uil0YU50hiHWz&_nc_ohc=8aucykLmdcQAX-tuJo6&_nc_ht=scontent.fbkk2-8.fna&oh=00_AfD_I05CyDVfRJD43FVa2lvv1bqfMwKVG4NIBNSotONOog&oe=63DDFE06",
              "size": "3xl",
              "margin": "md"
            }
          ]
        },
        "footer": {
          "type": "box",
          "layout": "vertical",
          "contents": [
            {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "button",
                  "action": {
                    "type": "message",
                    "label": "เปิดให้บริการช่วงเวลาใดบ้าง",
                    "text": "เปิดให้บริการช่วงเวลาใดบ้าง"
                  },
                  "style": "secondary",
                  "color": "#ccffff"
                }
              ],
              "borderWidth": "none",
              "cornerRadius": "xxl",
              "spacing": "none",
              "margin": "none"
            },
            {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "button",
                  "action": {
                    "type": "message",
                    "label": "สิทธิหลักประกันสุขภาพเมื่อเจ็บป่วย ",
                    "text": "FAQ#2"
                  },
                  "style": "secondary",
                  "color": "#ccffff"
                }
              ],
              "cornerRadius": "xxl",
              "margin": "sm"
            },
            {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "button",
                  "action": {
                    "type": "message",
                    "label": " หากพบปัญหาจากการใช้สิทธิ",
                    "text": "FAQ#3"
                  },
                  "style": "secondary",
                  "color": "#ccffff",
                  "margin": "none"
                }
              ],
              "cornerRadius": "xxl",
              "margin": "sm"
            }
          ],
          "borderWidth": "none"
        }
      }
    }';
      $replymessage = json_decode($message);
  }
  else if ($text == "เปิดให้บริการช่วงเวลาใดบ้าง"){
    $message = '{
        "type" : "text",
        "text" : "เปิดให้บริการตั้งแต่เวลา 08:00 น. - 16:00 น."
      }';
      $replymessage = json_decode($message);
  }
  else if ($text == "สิทธิหลักประกันสุขภาพเมื่อเจ็บป่วย"){
    $message = '{
        "type" : "sticker",
        "packageId" : 11538,
        "stickerId" : 51626506
    }';
      $replymessage = json_decode($message);
  }
  else if ($text == "หากพบปัญหาจากการใช้สิทธิ"){
    $message = '{
        "type" : "sticker",
        "packageId" : 11539,
        "stickerId" : 52114129
      }';
      $replymessage = json_decode($message);
  }
  
  
  
  else if ($text == "บริการอื่นๆ"){
    $message = '{
      "type": "flex",
      "altText": "Flex Message",
      "contents": {
        "type": "carousel",
        "contents": [
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "image",
                  "size": "full",
                  "margin": "none",
                  "url": "https://sv1.picz.in.th/images/2023/01/06/JbLP7g.png"
                }
              ],
              "spacing": "none",
              "margin": "none",
              "borderWidth": "none",
              "cornerRadius": "none",
              "justifyContent": "space-evenly",
              "offsetBottom": "none",
              "offsetTop": "xxl",
              "action": {
                "type": "uri",
                "label": "action",
                "uri": "https://forms.gle/ozSiumGt9wvCKVb6A"
              }
            }
          },
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "image",
                  "url": "https://sv1.picz.in.th/images/2023/01/06/JbLCF1.png",
                  "size": "4xl"
                },
                {
                  "type": "button",
                  "action": {
                    "type": "uri",
                    "label": "รพ.สต. วัดพริก",
                    "uri": "https://www.facebook.com/profile.php?id=100064856228167&mibextid=LQQJ4d"
                  },
                  "margin": "xs",
                  "style": "secondary",
                  "color": "#ccffff",
                  "height": "sm"
                },
                {
                  "type": "button",
                  "action": {
                    "type": "uri",
                    "label": "อบต. วัดพริก",
                    "uri": "https://www.wadprik.go.th"
                  },
                  "margin": "xs",
                  "style": "secondary",
                  "height": "sm",
                  "color": "#ccffff"
                }
              ]
            }
          },
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "image",
                  "size": "full",
                  "margin": "none",
                  "url": "https://sv1.picz.in.th/images/2023/01/06/JbLD8n.png"
                }
              ],
              "spacing": "none",
              "margin": "none",
              "borderWidth": "none",
              "cornerRadius": "none",
              "justifyContent": "space-evenly",
              "offsetBottom": "none",
              "offsetTop": "xxl"
            }
          },
          {
            "type": "bubble",
            "body": {
              "type": "box",
              "layout": "vertical",
              "contents": [
                {
                  "type": "image",
                  "size": "full",
                  "margin": "none",
                  "url": "https://sv1.picz.in.th/images/2023/01/06/JbGLRq.png"
                }
              ],
              "spacing": "none",
              "margin": "none",
              "borderWidth": "none",
              "cornerRadius": "none",
              "justifyContent": "space-evenly",
              "offsetBottom": "none",
              "offsetTop": "xxl"
            }
          }
        ]
      }
    }';
      $replymessage = json_decode($message);
  }
  /* else{
    $message = '{
        "type" : "text",
        "text" : "1.ไม่มีข้อมูลที่ต้องการโปรดทำรายการเมนูใหม่อิอิ\n 2.ไม่มีข้อมูลที่ต้องการโปรดทำรายการเมนูใหม่อิอิ\n 3.ไม่มีข้อมูลที่ต้องการโปรดทำรายการเมนูใหม่อิอิ\n"
    }';
    $replymessage = json_decode($message);
}
*/

$lineData['URL'] = "https://api.line.me/v2/bot/message/reply";
$lineData['AccessToken'] = "9YOgX+LqsgA7uAnXJjop5TTQK7OCRim1vi+xgfiKYUpBNAn9wobOLNN28kqLC5rPdrgFYT7h9SDTHlUernB+4VHzFsMYX0Act11ERe4WF1p2VyUfGMW8xu2NQFmcKv9tDY4lHX35PKqaGqHMDLSQUQdB04t89/1O/w1cDnyilFU=";
$replyJson["replyToken"] = $replyToken;
$replyJson["messages"][0] = $replymessage;

$encodeJson = json_encode($replyJson);

$results = sendMessage($encodeJson,$lineData);
echo $results;
http_response_code(200);


/* ร้องเรียนปัญหา

{
  "type": "carousel",
  "contents": [
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "size": "4xl",
            "url": "https://sv1.picz.in.th/images/2023/01/10/Js5XdP.png"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "ร้องเรียนร้องทุกข์",
              "uri": "https://www.wadprik.go.th/contact4.php"
            },
            "margin": "xs",
            "style": "secondary",
            "color": "#ccffff",
            "height": "sm"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "uri": "https://www.wadprik.go.th/contact5.php",
              "label": "ช่องรับฟังความคิดเห็น"
            },
            "margin": "md",
            "style": "secondary",
            "height": "sm",
            "color": "#ccffff"
          }
        ]
      }
    }
  ]
}

*/


/* คำถามที่พบบ่อย

{
  "type": "bubble",
  "header": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "คำถามที่พบบ่อย",
        "align": "center",
        "size": "xxl",
        "margin": "none",
        "weight": "bold"
      }
    ],
    "spacing": "none",
    "backgroundColor": "#00b3b3"
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "image",
        "url": "https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.6435-9/35132832_273231176755788_122310691381051392_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGXZC0B35rOb3fQwZkaXmyhtCvVCsqJg_G0K9UKyomD8Te3YlMRT6MXGgWT09AOnheUF0c-ht8uil0YU50hiHWz&_nc_ohc=8aucykLmdcQAX-tuJo6&_nc_ht=scontent.fbkk2-8.fna&oh=00_AfD_I05CyDVfRJD43FVa2lvv1bqfMwKVG4NIBNSotONOog&oe=63DDFE06",
        "size": "3xl",
        "margin": "md"
      }
    ]
  },
  "footer": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "button",
            "action": {
              "type": "message",
              "label": "เปิดให้บริการช่วงเวลาใดบ้าง",
              "text": "FAQ#1"
            },
            "style": "secondary",
            "color": "#ccffff"
          }
        ],
        "borderWidth": "none",
        "cornerRadius": "xxl",
        "spacing": "none",
        "margin": "none"
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "button",
            "action": {
              "type": "message",
              "label": "สิทธิหลักประกันสุขภาพเมื่อเจ็บป่วย ",
              "text": "FAQ#2"
            },
            "style": "secondary",
            "color": "#ccffff"
          }
        ],
        "cornerRadius": "xxl",
        "margin": "sm"
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "button",
            "action": {
              "type": "message",
              "label": " หากพบปัญหาจากการใช้สิทธิ",
              "text": "FAQ#3"
            },
            "style": "secondary",
            "color": "#ccffff",
            "margin": "none"
          }
        ],
        "cornerRadius": "xxl",
        "margin": "sm"
      }
    ],
    "borderWidth": "none"
  }
}

*/


/* บริการอื่นๆ

{
  "type": "carousel",
  "contents": [
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "size": "full",
            "margin": "none",
            "url": "https://sv1.picz.in.th/images/2023/01/06/JbLP7g.png"
          }
        ],
        "spacing": "none",
        "margin": "none",
        "borderWidth": "none",
        "cornerRadius": "none",
        "justifyContent": "space-evenly",
        "offsetBottom": "none",
        "offsetTop": "xxl",
        "action": {
          "type": "uri",
          "label": "action",
          "uri": "https://forms.gle/ozSiumGt9wvCKVb6A"
        }
      }
    },
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "url": "https://sv1.picz.in.th/images/2023/01/06/JbLCF1.png",
            "size": "4xl"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "รพ.สต. วัดพริก",
              "uri": "https://www.facebook.com/profile.php?id=100064856228167&mibextid=LQQJ4d"
            },
            "margin": "xs",
            "style": "secondary",
            "color": "#ccffff",
            "height": "sm"
          },
          {
            "type": "button",
            "action": {
              "type": "uri",
              "label": "อบต. วัดพริก",
              "uri": "https://www.wadprik.go.th"
            },
            "margin": "xs",
            "style": "secondary",
            "height": "sm",
            "color": "#ccffff"
          }
        ]
      }
    },
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "size": "full",
            "margin": "none",
            "url": "https://sv1.picz.in.th/images/2023/01/06/JbLD8n.png"
          }
        ],
        "spacing": "none",
        "margin": "none",
        "borderWidth": "none",
        "cornerRadius": "none",
        "justifyContent": "space-evenly",
        "offsetBottom": "none",
        "offsetTop": "xxl"
      }
    },
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "size": "full",
            "margin": "none",
            "url": "https://sv1.picz.in.th/images/2023/01/06/JbGLRq.png"
          }
        ],
        "spacing": "none",
        "margin": "none",
        "borderWidth": "none",
        "cornerRadius": "none",
        "justifyContent": "space-evenly",
        "offsetBottom": "none",
        "offsetTop": "xxl"
      }
    }
  ]
}

*/


/* imagemap 

{
    "type": "imagemap",
    "baseUrl": "https://ex10.tech/store/v1/public/content/upload/imagemap/bf7b8458-c0ae-41f0-9b74-f40b81ebc8d6",
    "altText": "Imagemap generator By EX10",
    "baseSize": {
        "width": 1040,
        "height": "937"
    },
    "actions": [
        {
            "type": "uri",
            "area": {
                "x": 15,
                "y": 359,
                "width": 235,
                "height": 185
            },
            "linkUri": "tel:191"
        },
        {
            "type": "uri",
            "area": {
                "x": 269,
                "y": 356,
                "width": 237,
                "height": 187
            },
            "linkUri": "tel:199"
        },
        {
            "type": "uri",
            "area": {
                "x": 525,
                "y": 355,
                "width": 250,
                "height": 187
            },
            "linkUri": "tel:1669"
        },
        {
            "type": "uri",
            "area": {
                "x": 789,
                "y": 357,
                "width": 245,
                "height": 185
            },
            "linkUri": "tel:1188"
        },
        {
            "type": "uri",
            "area": {
                "x": 48,
                "y": 577,
                "width": 460,
                "height": 191
            },
            "linkUri": "tel:055386084"
        },
        {
            "type": "uri",
            "area": {
                "x": 531,
                "y": 577,
                "width": 460,
                "height": 191
            },
            "linkUri": "tel:0555210270"
        }
    ]
}

*/
?>