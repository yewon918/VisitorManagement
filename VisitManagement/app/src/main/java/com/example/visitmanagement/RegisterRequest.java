package com.example.visitmanagement;
import com.android.volley.AuthFailureError;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;
public class RegisterRequest extends StringRequest{
    // 서버 URL 설정 ( PHP 파일 연동 )
    final static private String URL = "http://ferrydraw.dothome.co.kr/register.php";
    private Map<String, String> map;


    public RegisterRequest(String ID, String Password, /*String userPassCheck,*/ String Name, String Phone_Num, String Belonging, Response.Listener<String> listener) {
        super(Method.POST, URL, listener, null);

        map = new HashMap<>();
        map.put("ID",ID);
        map.put("Password", Password);
        //map.put("userPassCheck", userPassCheck);
        map.put("Name", Name);
        map.put("Phone_Num", Phone_Num);
        map.put("Belonging", Belonging);

    }

    @Override
    protected Map<String, String> getParams() throws AuthFailureError {
        return map;
    }
}