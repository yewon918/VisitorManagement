package com.example.visitmanagement;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class login extends AppCompatActivity {
    private EditText userId, userPw;
    private Button btn_login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        userId=findViewById(R.id.et_id);
        userPw=findViewById(R.id.et_pw);
        btn_login=findViewById(R.id.btn_login);

        //로그인 클릭시 수행
        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //EditText에 현재 입력되어 있는 값 가져옴.
                String userID=userId.getText().toString();
                String userPass=userPw.getText().toString();

                Response.Listener<String> responseListener=new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try{
                            System.out.println("hi"+response);
                            JSONObject jsonObject=new JSONObject(response);
                            boolean success=jsonObject.getBoolean("success");
                            if (success){
                                String userID=jsonObject.getString("userID");

                                Toast.makeText(getApplicationContext(),"로그인에 성공하였습니다.",Toast.LENGTH_SHORT).show();
                                Intent intent=new Intent(login.this, reservationform.class);
                                intent.putExtra("userID",userID);
                                intent.putExtra("userPass",userPass);
                                startActivity(intent);
                            }else{
                                //로그인 실패
                                Toast.makeText(getApplicationContext(),"로그인에 실패하였습니다.",Toast.LENGTH_SHORT).show();
                                return;
                            }
                        }catch (JSONException e){
                            e.printStackTrace();
                        }
                    }
                };
                LoginRequest loginRequest= new LoginRequest(userID, userPass, responseListener);
                RequestQueue queue=Volley.newRequestQueue(login.this);
                queue.add(loginRequest);
            }
        });

    }
}