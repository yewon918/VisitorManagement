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

import org.json.JSONException;
import org.json.JSONObject;


public class LoginActivity extends AppCompatActivity {
    private EditText et_id, et_pw;
    private Button btn_login, btn_register;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        et_id = (EditText) findViewById(R.id.et_id);
        et_pw =(EditText) findViewById(R.id.et_pw);

        btn_register = (Button)findViewById(R.id.btn_register);


        // 회원가입 버튼을 클릭 시 수행
        btn_register.setOnClickListener(view -> {
            Intent intent = new Intent(LoginActivity.this, RegisterActivity.class);
            startActivity(intent);

        });

        //로그인 클릭시 수행
        btn_login = findViewById(R.id.btn_login);
        btn_login.setOnClickListener( new View.OnClickListener() {
            @Override
            public void onClick(View view){
                // EditText에 현재 입력되어있는 값을 get(가져온다)해온다.
                String ID = et_id.getText().toString();
                String Password = et_pw.getText().toString();
                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        try {
                            JSONObject jsonObject = new JSONObject( response );
                            boolean success = jsonObject.getBoolean( "success" );

                            if(success) {//로그인 성공시

                                String ID = jsonObject.getString( "ID" );
                                String Password = jsonObject.getString( "Password" );
                                String Name = jsonObject.getString( "Name" );

                                Toast.makeText( getApplicationContext(), String.format("%s님 환영합니다.", Name), Toast.LENGTH_SHORT ).show();
                                Intent intent = new Intent( LoginActivity.this, menu.class);
                                intent.putExtra( "ID", ID );
                                intent.putExtra( "Password", Password );
                                intent.putExtra( "Name", Name );

                                startActivity( intent );

                            } else {//로그인 실패시
                                Toast.makeText( getApplicationContext(), "로그인에 실패하셨습니다.", Toast.LENGTH_SHORT ).show();
                                return;
                            }

                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                };
                Response.ErrorListener errorListener = error -> {
                    System.out.println(error.getMessage());
                };
                LoginRequest loginRequest = new LoginRequest(ID, Password, responseListener,errorListener);
                RequestQueue queue = Volley.newRequestQueue(LoginActivity.this);
                queue.add(loginRequest);
            }


//                Response.Listener<String> responseListener = response -> {
//                        try {
//                            JSONObject jsonObject=new JSONObject(response);
//                            boolean success = jsonObject.getBoolean("success");
//                            if (success) { // 로그인에 성공한 경우
//                                String id = jsonObject.getString("ID");
//                                String password = jsonObject.getString("Password");
//
//                                Toast.makeText(getApplicationContext(),"로그인에 성공하였습니다.",Toast.LENGTH_SHORT).show();
//                                Intent intent = new Intent(LoginActivity.this, menu.class);
//                                intent.putExtra("ID", id);
//                                intent.putExtra("Password", password);
//                                startActivity(intent);
//                            } else { // 로그인에 실패한 경우
//                                Toast.makeText(getApplicationContext(),"로그인에 실패하였습니다.",Toast.LENGTH_SHORT).show();
//                                return;
//                            }
//                        } catch (JSONException e) {
//                            e.printStackTrace();
//                        }
//
//                };


        });
    }
}
