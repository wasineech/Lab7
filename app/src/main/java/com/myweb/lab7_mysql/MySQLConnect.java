package com.myweb.lab7_mysql;


import android.app.Activity;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

public class MySQLConnect {
    private final Activity main;
    private List<String> list;
    private String URL = "http://10.51.8.172/" , GET_URL = "getpost.php" , SENT_URL = "sent_post.php";

    public MySQLConnect() { main = null; }

    public MySQLConnect(Activity mainA){
        main = mainA;
        list = new ArrayList<String>();
    }


    public List<String> getData(){
        String url = URL + GET_URL;

        SrtingRequest stringRequest = new StringRequest(url, new Response.Listener<String>) {
            @Override
            public void onResponse(String respone) {
                showJSON(response);
                Toast.makeText(main, list.get(0), Toast.LENGTH_LONG).show();
            }
        }, new Response.ErrorLintener(){
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(main, error.getMessage(), Toast.LENGTH_LONG).show();

                }
            }
        }
    }
}
