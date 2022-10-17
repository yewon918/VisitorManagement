package com.example.visitmanagement;

import java.util.ArrayList;
import android.app.Activity;
import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;



public class UsersAdapter  extends RecyclerView.Adapter<UsersAdapter.CustomViewHolder>{
    private ArrayList<PersonalData> mList = null;
    private Activity context = null;


    public UsersAdapter(Activity context, ArrayList<PersonalData> list) {
        this.context = context;
        this.mList = list;
    }

    class CustomViewHolder extends RecyclerView.ViewHolder {
        protected TextView date;
        protected TextView place;
//        protected TextView confirm;


        public CustomViewHolder(View view) {
            super(view);
            this.date = (TextView) view.findViewById(R.id.textView_list_date);
            this.place = (TextView) view.findViewById(R.id.textView_list_place);
//            this.confirm = (TextView) view.findViewById(R.id.textView_list_confirm);
        }
    }


    @Override
    public CustomViewHolder onCreateViewHolder(ViewGroup viewGroup, int viewType) {
        View view = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.item_list, null);
        CustomViewHolder viewHolder = new CustomViewHolder(view);

        return viewHolder;
    }

    @Override
    public void onBindViewHolder(@NonNull CustomViewHolder viewholder, int position) {

        viewholder.date.setText(mList.get(position).getMember_date());
        viewholder.place.setText(mList.get(position).getMember_place());
//        viewholder.confirm.setText(mList.get(position).getMember_confirm());
    }

    @Override
    public int getItemCount() {
        return (null != mList ? mList.size() : 0);
    }
}
