package com.example.visitmanagement;
import android.graphics.Bitmap;
import android.net.Uri;

import com.android.volley.AuthFailureError;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;
public class RegisterRequest extends StringRequest{
    // 서버 URL 설정 ( PHP 파일 연동 )
    final static private String URL = "http://ferrydraw.dothome.co.kr/register.php";
    private Map<String, String> map;


    public RegisterRequest(String ID, String Password, String Name, String Phone_Num, String Belonging, Bitmap profileimage, Response.Listener<String> listener, Response.ErrorListener errorListener) {
        super(Method.POST, URL, listener, errorListener);

        map = new HashMap<>();
        map.put("ID",ID);
        map.put("Password", Password);
        map.put("Name", Name);
        map.put("Phone_Num", Phone_Num + "");
        map.put("Belonging", Belonging);
        map.put ("profileimage",profileimage+"");


    }

    @Override
    protected Map<String, String> getParams() throws AuthFailureError {
        return map;
    }
}